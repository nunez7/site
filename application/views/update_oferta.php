<div class="row bg-gray section-title">
	<div class="col-md-12"><h2>ACTUALIZACIÓN DE OFERTA DE TRABAJO</h2></div>
</div>
<br />
<p class="green cita">
	* Modifica los datos deseados y después da en el botón guardar.
</p>
<form class="form-general" id="form_upo" enctype="multipart/form-data" action="" method="post">
	<div class="row form-group">
		<div class="col-md-4">
			<label>Fecha de publicación</label>
			<input type="date" name="fecha_p" class="form-control" value="<?= $oferta['fecha'] ?>" required="">
			<input type="hidden" value="<?= $oferta['cve_oferta'] ?>" name="cve_oferta">
		</div>
		<div class="col-md-12">
			<label>Empresa</label>
			<input name="empresa" value="<?= $oferta['empresa'] ?>" required="" class="form-control" type="text" placeholder="Empresa de la oferta" />
		</div>
		<div class="col-md-12">
			<label>Descripción breve de la oferta</label>
			<textarea name="descripcion" required="" class="form-control" placeholder="..."><?= $oferta['descripcion'] ?></textarea>
		</div>
		<div class="col-md-4">
			<label>Imagen publicitaria</label>
			<input type="file" class="form-control-file" id="imagen" name="imagen">
		</div>
	</div>
	<div class="col-md-12">
		<button type="submit" id="btnBuscar" class="btn btn-send pull-right">Actualizar</button> 
	</div>
	<br />
</form>
<br />