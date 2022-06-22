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
		
		<div id="content">

			<br>
			
			<article>
				<!-- <p class="cita"><strong>Ideambiente.</strong></p> -->
				<img src="<?php echo base_url(); ?>images/folleto.jpg" alt="" style="width: 400px; display: block; margin: 0 auto; border-radius: 5px; border: 2px solid #EFEFEF;">
				<p class="gallery-link" style="text-align: center;"><a href="<?php echo site_url("training");?>" style="font-size: 18px; padding: 10px;">Consulta Planes de Estudio</a></p>
			</article>

			<br>

		</div>
		<?php $this->load->view('footer'); ?>
	</div>
	<?php $this->load->view('jscripts'); ?>
</body>
</html>
