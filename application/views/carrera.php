<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Carrera</title>
	<?php $this->load->view('scripts') ?>
</head>
<body>
	<!--<?php $this->load->view('loader'); ?>-->
	<div class="container">
		<?php $this->load->view('navigation'); ?>
		
		<div id="content">

			<br>
			<article>
				<p class="cita"><strong>Corriendo por la Educación</strong></p>
				<br>
				<img src="<?php echo base_url(); ?>images/recorrido.jpg" alt="" style="margin:0 auto; display:block; width:800px; border: 1px solid #dedede;" />
				<br>
				<img src="<?php echo base_url(); ?>images/informacion.jpg" alt="" style="margin:0 auto; display:block; width:800px; border: 1px solid #dedede;" />
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</article>

		</div>
		<?php $this->load->view('footer'); ?>
	</div>
	<?php $this->load->view('jscripts'); ?>
</body>
</html>