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
			<?php $this->load->view('slider-careers'); ?>
			<?php $this->load->view('sidebar'); ?>
		</div>
		
		<div id="content">

			<br>
			
			<article>
				<p class="cita"><strong>Ideambiente.</strong></p>
			<div class="lastevents">
						<a href="<?php echo base_url(); ?>documentos/convocatoria_ideambiente.pdf">
							<img src="<?php echo base_url(); ?>images/convocatoria_ideambiente_.jpg" alt="">
						</a>
					<p><br>
						<a href="<?php echo base_url(); ?>documentos/convocatoria_ideambiente.pdf" class="event"><strong>Convocatoria</strong></a>
					</p>
					
						<a href="<?php echo base_url(); ?>documentos/revista_ideambiente.pdf">
							<img src="<?php echo base_url(); ?>images/revista_ideambiente_.jpg" alt="">
						</a>
					<p><br>
						<a href="<?php echo base_url(); ?>documentos/revista_ideambiente.pdf" class="event"><strong>Revista</strong></a>
					</p>
				</div>
			</article>

			<br>

		</div>
		<?php $this->load->view('footer'); ?>
	</div>
	<?php $this->load->view('jscripts'); ?>
</body>
</html>
