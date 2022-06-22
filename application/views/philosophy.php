<!DOCTYPE html>
<html class="no-js" lang="es"> 
<head>
	<meta charset="utf-8">
	<title>Folosofía institucional</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('scripts') ?>
</head>
<body>
	<?php $this->load->view('navigation') ?>
	<div class="container section">
		<!-- SECTION TITLE -->
		<div class="row bg-gray section-title">
			<div class="col-md-12"><h2>QUIENES SOMOS?</h2></div>
		</div>
		<!-- ABOUT -->
		<div class="row">
			<div class="col-sm-5 col-md-4 vert-shadow hidden-xs">
				<ul class="about">
					<li>QUIENES SOMOS? <img src="<?php echo base_url(); ?>img/ico-quienes.png"></li>
					<li>MISIÓN Y VISIÓN <img src="<?php echo base_url(); ?>img/ico-mision.png"></li>
					<li>POLÍTICA <img src="<?php echo base_url(); ?>img/ico-politica.png"></li>
				</ul>
			</div>
			<div class="col-sm-7 col-md-8 info-text">
				<h4>MISIÓN</h4>
				<p class="m-top">Somos una institución formadora de profesionistas en las áreas de agronegocios y servicios, capaces de transformar el entorno, impulsando el desarrollo económico, social y cultural en la zona de influencia.</p>
				<h4 class="m-top-md">VISIÓN</h4>
				<p class="m-top">Ser una institución innovadora con profesores de alto grado de preparación técnica, generadores de proyectos de investigación que impulsen el desarrollo de la zona de influencia, coadyuvando a la formación de profesionistas integrales, líderes y emprendedores; favoreciendo la movilidad nacional e internacional.</p>
				<h4 class="m-top-md">POLÍTICA</h4>
				<p class="m-top">Somos una institución formadora de profesionistas en las áreas de agronegocios y servicios, capaces de transformar el entorno, impulsando el desarrollo económico, social y cultural en la zona de influencia.</p>
				<h4 class="m-top-md">VALORES</h4>
				<p class="m-top">Competitividad, Liderazgo, Innovación, Emprendurismo, Responsabilidad, Solidaridad, Proactividad, Honestidad, Calidad Personal.</p>
				<div class="row m-top-lg">
					<div class="col-sm-4 text-center">
						<a href="http://www.seutyp.com/estudiante/" title="Encuesta">
							<img src="<?php echo base_url(); ?>img/img-somos-01.jpg" class="img-responsive center-block">
							<h4 class="green">Encuesta<br>SEUTYP</h4>
						</a>
					</div>
					<div class="col-sm-4 text-center m-top-mov">
						<a href="<?php echo base_url(); ?>transparencia" title="Transparencia">
							<img src="<?php echo base_url(); ?>img/img-somos-02.jpg" class="img-responsive center-block">
							<h4 class="green">TRANSPARENCIA</h4>
						</a>
					</div>
					<div class="col-sm-4 text-center m-top-mov">
						<a href="<?php echo base_url(); ?>intranet.html" title="Intranet">
							<img src="<?php echo base_url(); ?>img/img-somos-03.jpg" class="img-responsive center-block">
							<h4 class="green">INTRANET</h4>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php $this->load->view('footer'); ?>
	<?php $this->load->view('jscripts'); ?>
</body>
</html>
