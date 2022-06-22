<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Ficha para pago en banco</title>
  	<?php $this->load->view('scripts') ?>
	<link rel="stylesheet" media="all" href="<?php echo base_url(); ?>css/ficha_aspirante.css" />
</head>
<body>
	<div class="documento border-secondary">
		<div class="row">
			<div class="col-md-3">
				<img src="<?php echo base_url(); ?>images/logoutc.jpg" />
			</div>
			<div class="col-md-9">
				<h3 class="align-middle d-flex justify-content-center">Ficha de inscripción para pago en banco</h3>
			</div>
		</div>
		<div class="row salto">
			<div class="col-md-5 font-weight-bold">Fecha:</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo date("d/m/Y"); ?></div>
		</div>
		<div class="row salto">
			<div class="col-md-5 font-weight-bold">Nombre del aspirante:</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $nombre_completo; ?></div>
		</div>
		<div class="row salto">
			<div class="col-md-5 font-weight-bold">Nombre del bachillerato:</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $bachillerato_procede; ?></div>
		</div>
		<div class="row salto">
			<div class="col-md-5 font-weight-bold">Correo electrónico del aspirante:</div>
			<div class="col-md-6 border-bottom border-dark text-lowercase"><?php echo $email; ?></div>
		</div>
		<div class="row salto">
			<div class="col-md-5 font-weight-bold">Carrera de elección:</div>
			<div class="col-md-6 border-bottom border-dark"><?php echo $carrera; ?> - <?php echo $turno; ?></div>
		</div>
		<div class="row salto">
			<div class="col-md-5 font-weight-bold">Importe ($250 de inscripción + $300 de mensualidad):</div>
			<div class="col-md-6 border-bottom border-dark">$ 550.00 (MNX)</div>
		</div>
		<div class="row salto">
			<div class="col-md-5"><span class="font-weight-bold">Datos bancarios para depósito en ventanilla</span><span> (BANORTE):</span></div>
			<div class="col-md-6 border-bottom border-dark">Cuenta Banorte: 1171537359 </div>
		</div>
		<div class="row salto">
			<div class="col-md-5 font-weight-bold">Datos bancarios para trasferencia:</div>
			<div class="col-md-6 border-bottom border-dark">Clabe Interbancaria Banorte: 072 573 01171537359 2</div>
		</div>
		<div class="row salto-firma">
			<div class="col-md-7 col-md-offset-4 text-center mx-auto">
				<p class=""><?php echo $nombre_completo; ?></p>
				<br />
				<p class="border-top border-dark">Nombre y firma del aspirante</p>
			</div>
		</div>
		<div class="salto-firma  text-right">
				<p class="text-capitalize envia font-italic">* Sube <span class="text-lowercase">esta ficha firmada, el comprobante que recibirás en el banco y acta de nacimiento en <a href="#" title="" class="text-primary">http://www.utdelacosta.edu.mx/index.php/aspirante/reportar_pago</a></span></p>
		</div>
	</div>
    <?php $this->load->view('jscripts'); ?>
	<script>
		window.print();
	</script>
</body>
</html>