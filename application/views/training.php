<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Educación Continua</title>
	<?php $this->load->view('scripts') ?>
</head>
<body>
	<!--<?php $this->load->view('loader'); ?>-->
	<div class="container">
		<?php $this->load->view('navigation'); ?>
		
		<div id="content">
			<header>
				<h1>Cursos</h1>
			</header>
			<article>
				<h1>Idiomas</h1>
				<div class="square">
					<div class="courses">
						<a href="<?php echo base_url(); ?>cursos/formato_ingles.pdf">
							<img src="<?php echo base_url(); ?>images/c-ingles3.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/formato_frances.pdf">
							<img src="<?php echo base_url(); ?>images/c-frances3.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/Formato_TOEFL.pdf">
							<img src="<?php echo base_url(); ?>images/c-toefl2.png" width="180px" alt="">
						</a>
					</div>
				</div>
			</article>
			<br><br>
			<article>
				<h1>Capacitaciones y Actualizaciones</h1>
				<div class="square">
					<div class="courses">
						<a href="<?php echo base_url(); ?>cursos/hablar_en_publico.pdf">
							<img src="<?php echo base_url(); ?>images/c-hpublico2.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/tutorias.pdf">
							<img src="<?php echo base_url(); ?>images/c-tutorias2.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/social_media_y_estrategia_digital.pdf">
							<img src="<?php echo base_url(); ?>images/c-smedia2.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/radio_en_linea.pdf">
							<img src="<?php echo base_url(); ?>images/c-radio2.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/puntos_de_venta_y_gestion_de_inventarios.pdf">
							<img src="<?php echo base_url(); ?>images/c-pventa2.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/formato_computacion.pdf">
							<img src="<?php echo base_url(); ?>images/c-computacion3.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/programa_tu_android.pdf">
							<img src="<?php echo base_url(); ?>images/c-android2.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/programa_tu_iphone.pdf">
							<img src="<?php echo base_url(); ?>images/c-iphone2.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/python.pdf">
							<img src="<?php echo base_url(); ?>images/c-python2.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/desarrollo_de_tienda_virtual_online.pdf">
							<img src="<?php echo base_url(); ?>images/c-tvirtual2.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/cisco1.pdf">
							<img src="<?php echo base_url(); ?>images/CISCO1.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/cisco2.pdf">
							<img src="<?php echo base_url(); ?>images/CISCO2.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/scratch.pdf">
							<img src="<?php echo base_url(); ?>images/c-scratch2.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/arduino.pdf">
							<img src="<?php echo base_url(); ?>images/c-arduino2.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/arduino1.pdf">
							<img src="<?php echo base_url(); ?>images/c-arduino3.png" width="180px" alt="">
						</a>
						<a href="<?php echo base_url(); ?>cursos/insumos organicos.pdf">
							<img src="<?php echo base_url(); ?>images/c-insumos2.png" width="180px" alt="">
						</a>
					</div>
				</div>
			</article>
		</div>
		<?php $this->load->view('footer'); ?>
	</div>
</body>
</html>
