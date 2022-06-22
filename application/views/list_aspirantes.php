<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Lista de aspirantes</title>
	<?php $this->load->view('scripts') ?>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<tr>
						<th>No</th>
						<th>Nombre</th>
						<th>Primer apellido</th>
						<th>Segundo apellido</th>
						<th>Carrera</th>
						<th>Turno</th>
						<th>Bachillerato procede</th>
						<th>No. Tel</th>
						<th>NSS</th>
						<th>Email</th>
						<th>Fecha de alta</th>
					</tr>
					<?php foreach($aspirantes as $a): ?>
					<tr>
						<td><a target="_blank" href='<?php echo base_url(); ?>index.php/aspirante/ficha_escolares/<?= $a->cve_aspirante ?>'><?= $a->cve_aspirante ?></a></td>
						<th><?= $a->nombre ?></th>
						<th><?= $a->apellido_paterno ?></th>
						<th><?= $a->apellido_materno ?></th>
						<th><?= $a->carrera ?></th>
						<th><?= $a->turno ?></th>
						<th><?= $a->bachillerato_procede ?></th>
						<th><?= $a->numero_telefonico ?></th>
						<th><?= $a->nss ?></th>
						<th><?= $a->email ?></th>
						<th><?= $a->fecha_alta ?></th>
					</tr>
					 <?php endforeach ?>
				</table>
			</div>
		</div>
	</div>
	<?php $this->load->view('jscripts'); ?>
</body>
</html>