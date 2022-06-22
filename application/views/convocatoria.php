<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenidos</title>
	<?php $this->load->view('scripts') ?>
</head>
<body>
	<!--<?php $this->load->view('loader'); ?>-->
	<div class="container">
		<?php $this->load->view('navigation'); ?>
		<div id="main">
			<?php $this->load->view('slider'); ?>
			<?php $this->load->view('sidebar'); ?>
		</div>
		
		<div id="content">

			<br>
			
			<article>
				<p class="cita"><strong>Convocatoria</strong></p>
				<p>A profesionistas de reconocido prestigio y experiencia, a participar en el proceso de selección para cubrir las vacantes que se generen en la Universidad Tecnológica de la Costa en el cuatrimestre septiembre-diciembre 2017 por la ampliación de oferta. educativa</p><br>
				<div class="lastevents">
					<a href="<?php echo base_url(); ?>documentos/convocatorias/convocatoria_2017.pdf">
						<img src="<?php echo base_url(); ?>images/pdf.png" alt="" style="border: 0;">
					</a>
					<p>
						<br><br>
						<a href="<?php echo base_url(); ?>documentos/convocatorias/convocatoria_2017.pdf" class="event"><strong>Bases</strong></a>
					</p>

					<a href="<?php echo base_url(); ?>documentos/convocatorias/Formato_Resumen_Curriculum_2017.doc">
						<img src="<?php echo base_url(); ?>images/word.png" alt="" style="border: 0;">
					</a>
					<p>
						<br><br>
						<a href="<?php echo base_url(); ?>documentos/convocatorias/Formato_Resumen_Curriculum_2017.doc" class="event"><strong>Formato Resumen de Curriculum</strong></a>
					</p>


				</div>
				<br>
				<br>
			</article>


		</div>
		<?php $this->load->view('footer'); ?>
	</div>
	<?php $this->load->view('jscripts'); ?>
</body>
</html>
