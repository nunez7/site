<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Administración de Página</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('scripts') ?>
</head>
<?php //$this->session->userdata('rol');  ?>
<body>
	<header>
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/logo-ut.png" class="img-responsive" alt="Universidad Tecnológica de la Costa"></a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?php echo site_url("administrar_sys");?>">+ Oferta<br><span>&nbsp;</span></a></li>
								<li><a href="<?php echo site_url("/administrar_sys/ofertas");?>">Lista de ofertas<br><span>&nbsp;</span></a></li>
								<li><a href="<?php echo base_url(); ?>index.php/login/cerrar_sesion">CERRAR <br><span>Sesión</span></a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div>
				</div>
			</div>
		</nav>
	</header>

	<?php 
	$textToEncrypt = "Mi información secreta";
	$encryptionMethod = "AES-128-ECB"; 
	$secretHash = "CuandoL0sGFroiBailan";
	$encryptedMessage = openssl_encrypt($textToEncrypt, $encryptionMethod, $secretHash, 0, "");
		//To Decrypt
	$decryptedMessage = openssl_decrypt($encryptedMessage, $encryptionMethod, $secretHash);
	if(!empty($this->session->userdata('logeado'))){
		?>
		<div class="container">
			<div class="row">
				<?php 
      //Si no existe la variable
				if (!isset($opcion)){
					?>
					<div class="col-md-12">
						<div class="row bg-gray section-title">
							<div class="col-md-12"><h2>REGISTRO DE OFERTA DE TRABAJO</h2></div>
						</div>
						<br />
						<p class="green cita">
							* Ingresa los datos solicitados y después da en el botón guardar.
						</p>
						<form class="form-general" id="form_oferta" enctype="multipart/form-data" action="" method="post">
							<div class="row form-group">
								<div class="col-md-4">
									<label>Fecha de publicación</label>
									<input type="date" name="fecha_p" id="fecha_p" class="form-control" value="" required="">
								</div>
								<div class="col-md-12">
									<label>Empresa</label>
									<input name="empresa" required="" class="form-control" type="text" placeholder="Empresa de la oferta" />
								</div>
								<div class="col-md-12">
									<label>Descripción breve de la oferta</label>
									<textarea name="descripcion" required="" class="form-control" placeholder="..."></textarea>
								</div>
								<div class="col-md-4">
									<label>Imagen publicitaria</label>
									<input type="file" class="form-control-file" id="imagen" name="imagen" required>
								</div>
							</div>
							<div class="col-md-12">
								<button type="submit" id="btnBuscar" class="btn btn-send pull-right">Guardar</button> 
							</div>
							<br />
						</form>
					</div>
				<?php } 
				if (isset($opcion)){
					?>
					<div class="col-md-12">
						<?php 
						switch($opcion){
							case "ofertas":
							$this->load->view('oferta_bolsat');
							break;
						case "update_oferta":
							$this->load->view('update_oferta');
							break;
						}
						?>
					</div>
					<?php 
				}
				?>

			<?php } ?>
		</div></div>
<br />

		<?php $this->load->view('footer'); ?>
		<?php $this->load->view('jscripts'); ?>
		<script>
			$( document ).ready(function() {
				var d = new Date();

				var month = d.getMonth()+1;
				var day = d.getDate();
				var output = d.getFullYear() + '-' +
				(month<10 ? '0' : '') + month + '-' +
				(day<10 ? '0' : '') + day;

				$("#fecha_p").val(output);

				//Data-order
				$('#data-ofertas').DataTable();

				$("#form_oferta").submit(function(e){
					e.preventDefault();
					var file1 = document.getElementById("imagen").value;
					var extArray = new Array(".jpg", ".png", ".pdf", ".jpeg");
					var ext1 = file1.slice(file1.indexOf(".")).toLowerCase();

					var aprobado = false;
					for (var i = 0; i < extArray.length; i++)
					{
						if (extArray[i] === ext1)
						{
							aprobado = true;
							break;
						}
					}
					if (aprobado == false) {
       					 alert("Los archivos deben ser imagen");
       					 return false;
      				}
					$.ajax({
						type: "post",
						url: "<?php echo base_url(); ?>" + "index.php/administrar_sys/registro_oferta",
						data: new FormData($(this)[0]),
						cache: false,
						contentType: false,
						processData: false,
						success: function (data) {
							var dato = data.split("*_*");
							switch (dato[0]) {
								case "save":
								$("#form_oferta")[0].reset();
								alert("Datos guardados");
          break;
          default:
          alert("Ocurrió un error al procesaro los datos. " + data);
          break;
      }
  }, error: function (data) {
  	console.log(data);
  	alert("¡Ups! No se pudo conectar con el servidor :(!");
  }
});
				});
				//Update
				$("#form_upo").submit(function(e){
					e.preventDefault();
					var file1 = document.getElementById("imagen").value;
					var extArray = new Array(".jpg", ".png", ".pdf", ".jpeg");
					var ext1 = file1.slice(file1.indexOf(".")).toLowerCase();

					var aprobado = false;
					for (var i = 0; i < extArray.length; i++)
					{
						if (extArray[i] === ext1)
						{
							aprobado = true;
							break;
						}
					}
					if (aprobado == false && $("#imagen").val()!="") {
       					 alert("Los archivos deben una imagen");
       					 return false;
      				}

					$.ajax({
						type: "post",
						url: "<?php echo base_url(); ?>" + "index.php/administrar_sys/update_ofer",
						data: new FormData($(this)[0]),
						cache: false,
						contentType: false,
						processData: false,
						success: function (data) {
							var dato = data.split("*_*");
							switch (dato[0]) {
								case "save":
								alert("Datos actualizados");
          break;
          default:
          alert("Ocurrió un error al procesaro los datos. " + data);
          break;
      }
  }, error: function (data) {
  	console.log(data);
  	alert("¡Ups! No se pudo conectar con el servidor :(!");
  }
});
				});
			});
		</script>
	</body>
	</html>