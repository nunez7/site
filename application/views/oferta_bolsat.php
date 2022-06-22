<div class="row bg-gray section-title">
	<div class="col-md-12"><h2>LISTA DE OFERTAS DE BOLSA DE TRABAJO</h2></div>
</div>
<br />
<br />
<br />
<div class="table-responsive">
	<table class="table table-striped table-bordered" id="data-ofertas">
		<thead>
			<tr>
				<th>ID</th>
				<th>Empresa</th>
				<th>Descripción</th>
				<th>Fecha</th>
				<th>Imagen</th>
				<th>Editar</th>
				<th>Estado</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($ofertas as $o): ?>
				<tr>
					<td><?= $o->cve_oferta ?></td>
					<td><?= $o->empresa ?></td>
					<td><?= $o->descripcion ?></td>
					<td><?= $o->fecha ?></td>
					<td ><a target="_blank" title="Clic en la imagen para ver a detalle" href="<?php echo base_url(); ?>documentos/oferta_trabajo/<?= $o->imagen ?>"><img width="80px" src="<?php echo base_url(); ?>documentos/oferta_trabajo/<?= $o->imagen ?>" alt=""></a></td>
					<td><a class="btn btn-primary btn-xs"
						href="<?php echo site_url("/administrar_sys/update_oferta");?>/<?= $o->cve_oferta ?>">Modificar</a></td>
						<td>
							<?php if($o->activo==1){
								?>
								<a class="btn btn-danger btn-xs"
								href="<?php echo site_url("/administrar_sys/estado_oferta");?>/<?= $o->cve_oferta ?>/0">Dar de baja</a>
								<?php
							}else{
								?>
								<a class="btn btn-success btn-xs"
								href="<?php echo site_url("/administrar_sys/estado_oferta");?>/<?= $o->cve_oferta ?>/1">Activar</a>
								<?php
							} ?>
						</td>
					</tr>
				<?php endforeach ?>
				<?php if(empty($ofertas)){
					?>
					<tr>
						<td colspan="7" class="text-center">NO HAY DATOS</td>
					</tr>
					<?php
				} ?>
			</tbody>
		</table>
	</div>
	<br />