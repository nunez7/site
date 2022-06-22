<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Ficha para expediente</title>
  	<?php $this->load->view('scripts') ?>
	<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>css/ficha_aspirante.css" />
</head>
<body>
	<div class="ficha-escolares border-secondary">
		<div class="row">
			<div class="col-md-12">
				<img class="img_escolares" src="<?php echo base_url(); ?>images/logoutc.jpg" />
				<h3 class="align-middle d-flex justify-content-center">Datos de inscripción</h3>
			</div>
		</div>
		<div class="row salto2">
			<div class="col-md-5 font-weight-bold">Nombre:</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $nombre_completo; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">Bachillerato o prepataroria de procedencia / Ubicación (localidad y municipio):</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $bachillerato_procede; ?> / <?php echo $localidad_bachillerato; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">Carrera / Turno:</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $carrera; ?> / <?php echo $turno; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">Empresa donde trabaja:</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $empresa_trabaja; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">Domicilio:</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $domicilio; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">CURP / NSS:</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $curp; ?> / <?php echo $nss; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5"><span class="font-weight-bold">Sexo / Estado civil:</span></div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $sexo; ?> / <?php echo $estado_civil; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">Tutor / tutora:</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $tutor; ?> / <?php echo $tutora; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">Teléfono celular y Teléfono fijo:</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $telefono_celular; ?> / <?php echo $telefono_fijo; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">E-mail:</div>
			<div class="col-md-6 border-bottom border-dark text-lowercase"><?php echo $email; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">1. ¿Ha sido promovido/a por algún alumno de UTC?</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $promovido=="1" ? "Si, ".$alumno_promotor:"No"; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">2. ¿Tiene hijos/as?</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $tiene_hijo=="1" ? "Si, No. de hijos: ".$no_hijo:"No"; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">3. ¿Hablas alguna lengua indigena?</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $habla_indigena=="1" ? "Si":"No"; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">4. ¿Presentas alguna discapacidad?</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $discapacidado=="1" ? "Si, ".$discapacidades:"No"; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">5. ¿Qué opción de estudios fue la Ut?</div>
			<div class="col-md-6 border-bottom border-dark text-lowercase"><?php echo $opcion_utc=="1" ? "1ra":"2da"; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5 font-weight-bold">Medio por el que se enteró de la UT:</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $medio_entero; ?></div>
		</div>
		<div class="row salto3">
			<div class="col-md-5">Fecha de impresión: <?php echo date("d/m/Y"); ?></div>
		</div>
	</div>
    <?php $this->load->view('jscripts'); ?>
	<script>
		window.print();
	</script>
</body>
</html>