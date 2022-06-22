<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Convocatoria</title>
	<?php $this->load->view('scripts') ?>
</head>
<body>
	<!--<?php $this->load->view('loader'); ?>-->
	<div class="container">
		<?php $this->load->view('navigation'); ?>
		
		<div id="content">
			<br>
			<article>
				<p class="cita"><strong>Formatos de Convocatoria 2017</strong></p>
				<p>	
					<ul class="ul-docs">
						<li class="icon-pdf"><a href="<?php echo base_url(); ?>documentos/convocatorias/Manutencion_NAYARIT_2017-2018.pdf">Convocatoria</a></li>
						<li class="icon-pdf"><a href="<?php echo base_url(); ?>documentos/Becas/201730CONSTANCIA_INGRESOS_MANUTENCION.docx">Constancia de Ingresos</a></li>
						<li class="icon-pdf"><a href="<?php echo base_url(); ?>documentos/Becas/2017-10-27 formato_beca_manutencion.pdf">Constancia Transporte</a></li>
						<li class="icon-pdf"><a href="<?php echo base_url(); ?>documentos/Becas/Procedimiento para solicitud de Beca MANUTENCION.pdf">Procedimiento para solicitud de Beca Manutención</a></li>
					</ul>
				</p>
			</article>
		</div>
	</div>
		<?php $this->load->view('footer'); ?>
	</div>
	<?php $this->load->view('jscripts'); ?>
</body>
</html>